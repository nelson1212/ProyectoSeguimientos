(function($) {	
	$.widget("ui.comboboxAutocomplate", $.ui.autocomplete, {
		urlFind:''
	});
	$.widget("ui.combobox", {
		urlFind:'',
		options: {
			selectedId:'',
			selectedText:'',
			onSelected:function(event,data){
				//console.log(data);
				//	override this method if it need
			}
		},		
		_create: function() {
			var self = this;
			var select = this.element.hide();
//			console.log(this.options);
			var input = $("<input>")
				.insertAfter(select)				
				.bind(this)
				.comboboxAutocomplate({
					urlFind:this.options.urlFind,	
					select: function(event, ui) {						
						select.val(ui.item.id);
						$(this).trigger('selected', [ui]);	
					},	
					source: function(request, response) {
						select.val("");						
						$.ajax({
							url: this.options.urlFind + request.term,
							dataType: "json",								
							success: function(data) {
								response($.map(data, function(item) {
									return {
										id:item.id,
										label: item.label,
										value: item.value
									};									
								}));
							}
						});
					},					
					delay: 0,											
					minLength: 0
				})
				.addClass("ui-widget ui-corner-left")
				.css("width","80%")
				.val(this.options.selectedText)				
				.bind('selected', function(e,data) { 
//				   console.log('miladautocomplate');			
				   self.options.onSelected(e,data);
				});				
			
			$("<a>&nbsp;</a>")
			.attr("tabIndex", -1)
			.attr("title", "Show All Items")
			.insertAfter(input)
			.button({
				icons: {
					primary: "ui-icon-triangle-1-s"
				},
				text: false
			}).removeClass("ui-corner-all")
			.addClass("ui-corner-right ui-button-icon")				
			.click(function() {
				// close if already visible
				if (input.comboboxAutocomplate("widget").is(":visible")) {
					input.comboboxAutocomplate("close");
					return;
				}
				// pass empty string as value to search for, displaying all results
				input.comboboxAutocomplate("search", "");
				input.focus();
			});
		}
	});

})(jQuery);