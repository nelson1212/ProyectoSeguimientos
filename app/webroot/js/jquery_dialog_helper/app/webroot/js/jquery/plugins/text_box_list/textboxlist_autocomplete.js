/*
Script: TextboxList.Autocomplete.js
	TextboxList Autocomplete plugin

	Authors:
		Guillermo Rauch
	
	Note:
		TextboxList is not priceless for commercial use. See <http://devthought.com/projects/jquery/textboxlist/>
		Purchase to remove this message.
*/

(function(){
	
$.TextboxList.Autocomplete = function(textboxlist, _options){
	
  var index, prefix, method, container, list, values = [], searchValues = [], results = [], placeholder = false, current, currentInput, hidetimer, doAdd, currentSearch, currentRequest;
	var options = $.extend(true, {
		minLength: 1,
		maxResults: 10,
		insensitive: true,
		highlight: true,
		highlightSelector: null,
		mouseInteraction: true,
		onlyFromValues: false,
		queryRemote: false,
    remote: {
			url: '',			
			param: 'search',
			extraParams: {},
			loadPlaceholder: 'Please wait...'
    },
		method: 'standard',
		placeholder: '... برای نمایش خواننده ها ،لطفا ابتدای نام خواننده مورد نظر را وارد کنید'
	}, _options);
	
	var init = function(){
		textboxlist.addEvent('bitEditableAdd', setupBit)
			.addEvent('bitEditableFocus', search)
			.addEvent('bitEditableBlur', hide)
			.setOptions({bitsOptions: {editable: {addKeys: false, stopEnter: false}}});
		if ($.browser.msie) textboxlist.setOptions({bitsOptions: {editable: {addOnBlur: false}}});
		prefix = textboxlist.getOptions().prefix + '-autocomplete';
		method = $.TextboxList.Autocomplete.Methods[options.method];
		container = $('<div class="'+ prefix +'" />').width(textboxlist.getContainer().width()).appendTo(textboxlist.getContainer());
		if (chk(options.placeholder)) placeholder = $('<div class="'+ prefix +'-placeholder" />').html(options.placeholder).appendTo(container);		
		list = $('<ul class="'+ prefix +'-results" />').appendTo(container).click(function(ev){
			ev.stopPropagation(); ev.preventDefault();
		});
	};
	
	var setupBit = function(bit){
		bit.toElement().keydown(navigate).keyup(function(){ search(); });
	};
	
	var search = function(bit){
		if (bit) currentInput = bit;
		if (!options.queryRemote && !values.length) return;
		var search = $.trim(currentInput.getValue()[1]);
		if (search.length < options.minLength) showPlaceholder();
		if (search == currentSearch) return;
		currentSearch = search;
		list.css('display', 'none');
		if (search.length < options.minLength) return;
		if (options.queryRemote){
			
			if (searchValues[search]){
				values = searchValues[search];
			} else {
				var data = options.remote.extraParams;
				var type = options.remote.type;
				data[options.remote.param] = search;
				if (currentRequest) currentRequest.abort();
				textboxlist.getContainer().addClass('textboxlist-loading');				
				currentRequest = $.ajax({					
					url: options.remote.url,
					data: data,
					type:type,
					dataType: 'json',
					success: function(r){
						searchValues[search] = r;
						values = r;				
						textboxlist.getContainer().removeClass('textboxlist-loading');
						showResults(search);						
					}
				});
			}
		}
		showResults(search);
	};
	
	var showResults = function(search){
		
		var results = method.filter(values, search, options.insensitive, options.maxResults);
		if (textboxlist.getOptions().unique){
			results = $.grep(results, function(v){ return textboxlist.isDuplicate(v) == -1; });		
		}
		
		hidePlaceholder();
		if (!results.length) return;
		blur();
		list.empty().css('display', 'block');
		$.each(results, function(i, r){ addResult(r, search); });
		if (options.onlyFromValues) focusFirst();
		results = results;
	};
	
	var addResult = function(r, searched){
		var element = $('<li class="'+ prefix +'-result" />').html(r[3] ? r[3] : r[1]).data('textboxlist:auto:value', r);		
		element.appendTo(list);
		if (options.highlight) $(options.highlightSelector ? element.find(options.highlightSelector) : element).each(function(){
			if ($(this).html()) method.highlight($(this), searched, options.insensitive, prefix + '-highlight');
		});
		if (options.mouseInteraction){
			element.css('cursor', 'pointer').hover(function(){ focus(element); }).mousedown(function(ev){
				ev.stopPropagation(); 
				ev.preventDefault();
				clearTimeout(hidetimer);
				doAdd = true;
			}).mouseup(function(){
				if (doAdd){
					addCurrent();
					currentInput.focus();
					search();
					doAdd = false;
				}
			});
			if (!options.onlyFromValues) element.mouseleave(function(){ if (current && (current.get(0) == element.get(0))) blur(); });	
		}
	};
	
	var hide = function(){
		hidetimer = setTimeout(function(){
			hidePlaceholder();
			list.css('display', 'none');
			currentSearch = null;			
		}, $.browser.msie ? 150 : 0);
	};
	
	var showPlaceholder = function(){
		if (placeholder) placeholder.css('display', 'block');		
	};
	
	var hidePlaceholder = function(){
		if (placeholder) placeholder.css('display', 'none');
	};
	
	var focus = function(element){
		if (!element || !element.length) return;
		blur();
		current = element.addClass(prefix + '-result-focus');
	};
	
	var blur = function(){
		if (current && current.length){
			current.removeClass(prefix + '-result-focus');
			current = null;
		}
	};
	
	var focusFirst = function(){
		return focus(list.find(':first'));
	};
	
	var focusRelative = function(dir){
		if (!current || !current.length) return self;
		return focus(current[dir]());
	};
	
	var addCurrent = function(){
		var value = current.data('textboxlist:auto:value');
		var b = textboxlist.create('box', value.slice(0, 3));
		if (b){
			b.autoValue = value;
			if ($.isArray(index)) index.push(value);
			currentInput.setValue([null, '', null]);
			b.inject(currentInput.toElement(), 'before');
		}
		blur();
		return self;
	};
	
	var navigate = function(ev){
		var evStop = function(){ ev.stopPropagation(); ev.preventDefault(); };
		switch (ev.which){
			case 38:			
				evStop();
				(!options.onlyFromValues && current && current.get(0) === list.find(':first').get(0)) ? blur() : focusRelative('prev');
				break;
			case 40:			
				evStop();
				(current && current.length) ? focusRelative('next') : focusFirst();
				break;
			case 13:
				evStop();
				if (current && current.length) addCurrent();
				else if (!options.onlyFromValues){
					var value = currentInput.getValue();				
					var b = textboxlist.create('box', value);
					if (b){
						b.inject(currentInput.toElement(), 'before');
						currentInput.setValue([null, '', null]);
					}
				}
		}
	};
	
	this.setValues = function(v){
		values = v;
	};
	
	init();
};

$.TextboxList.Autocomplete.Methods = {
	/**
	 * I comment <code>if (regexp.test(values[i][1]))</code> for showing result which are in utf-8.
	 * e.g 
	 * 	result is :["25","\u0101\u03b8\u014dMI",null,"\u0101\u03b8\u014dMI - Letter - &#66476;&#66511;&#66495;&#66475;"]
	 *  so if we used <code>regexp.test</code> ,jump the records.because the orginal search was "θe" and result is "\u0101\u03b8\u014d".
	 *    
	 * @author milad
	 */
	standard: {
		filter: function(values, search, insensitive, max){
	
			var newvals = [], regexp = new RegExp('\\b' + escapeRegExp(search), insensitive ? 'i' : ''); //change By Milad Jafary			
//			var newvals = [];			
			if (values!=null){
				for (var i = 0; i < values.length; i++){
					if (newvals.length === max) break;				
					
	//				if (regexp.test(values[i][1])) //change By Milad Jafary
						newvals.push(values[i]);
				}
			}
			return newvals;
		},
		
		highlight: function(element, search, insensitive, klass){
			var regex = new RegExp('(<[^>]*>)|(\\b'+ escapeRegExp(search) +')', insensitive ? 'ig' : 'g');
			return element.html(element.html().replace(regex, function(a, b, c){
				return (a.charAt(0) == '<') ? a : '<strong class="'+ klass +'">' + c + '</strong>'; 
			}));
		}
	}
};

var chk = function(v){ return !!(v || v === 0); };
var escapeRegExp = function(str){ return str.replace(/([-.*+?^${}()|[\]\/\\])/g, "\\$1"); };

})();