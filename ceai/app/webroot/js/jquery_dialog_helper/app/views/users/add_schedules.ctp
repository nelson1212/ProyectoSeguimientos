<div class="schedules form">
	<fieldset>
		<legend><?php printf(__('Program Detail', true)); ?></legend>
		<div style="display:inline-block;width:40%">
			<span><?php echo __("Section",true).' : ';?></span>
			<span><?php echo $this->Radio->__('section',$program['Program']['section']);?></span>
		</div>
		<div style="display:inline-block;width:40%">
			<span><?php echo __("Date",true).' : ';?></span>
			<span><?php echo $this->Jalali->convertDate($program['Program']['date'],DT_NORMAL);?></span>			
		</div>				
	</fieldset>
<?php echo $this->Form->create('Schedule');?>
	<?php echo $this->Form->input('program_id',array('value'=>$program['Program']['id'],'type'=>'hidden'));?>	
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Schedule', true)); ?></legend>
 		<table cellpadding="0" cellspacing="0">
	 		<tr>
				<th style="width: 5%"><?php echo __('Row');?></th>
				<th style="width: 20%"><?php echo __('Time');?></th>
				<th style="width: 25%"><?php echo __('Type');?></th>
				<th style="width: 50%" colspan="2"></th>
			</tr>
			<?php				 
				$tag['td']='<td style="%s">%s</td>';
				$tag['tr']='<tr>%s</tr>';				
				$tr='';
				$buttonScript='';
				$changeScheduleType='';
				 
				for($index=0;$index < 10;$index++){					
					$td  ='';
					$id  = sprintf('Schedules%s',$index);
					$name= sprintf('Schedule.%s.',$index);					
					$selectedTime=$this->Radio->getProgramTime($program['Program']['section']);
					if (!empty($this->Form->validationErrors)){				
						$time=$this->Form->data['Schedule'][$index]['time'];	
						$selectedTime=$time['hour'].':'.$time['min'].':'.$time['sec'];						
						$changeScheduleType.="changeScheduleType('".$id."');";																			
					}
					$programSection=$this->Form->hidden($name.'program_section',array('value'=>$program['Program']['section']));
					$programId=$this->Form->hidden($name.'program_id',array('value'=>$program['Program']['id']));
					$songsSingerId=$this->Form->hidden($name.'songs_singer_id',array('id'=>$id.'songsSingerId','value'=>''));			
					$time=$this->Radio->time($name.'time',array('label'=>false,'timeFormat'=>24,'selected'=>$selectedTime));
					$time.=$this->Form->error($name."time",array('The Time is not in program time range'=>__('The Time is not in program time range',true)));
					$type=$this->Form->input($name.'type',array('id'=>$id.'scheduleType','label'=>false,'options'=>$this->Radio->getFieldStates('type')));
					$songTypeId=$this->Form->input($name.'song_type_id',array(
												   'id'=>$id.'songType',
												   'label'=>false,
												   'options'=>$songTypes,
												   'div'=>array('style'=>'margin:0px;padding:0px'),
												   'style'=>'display:none'));
					
					$this->Js->get("#".$id."scheduleType")
						->event('change', "return changeScheduleType('".$id."')", array('stop' => false));
										
					//create box for selecting an song					
					$songsSingerError=$this->Form->error($name."songs_singer_id",__("Please Select an Song",true));//show if user didn't select any song			
					$selectedSongBox =$this->Html->div('select-song',__('Select Songs',true),array('id'=>$id.'songName'));
					$selectedSongBox.=$this->Form->button(__('Select Songs',true),array('id'=>$id.'btnSelectSong'));
					$selectedSongBox =$this->Html->div('',$selectedSongBox.$songsSingerError,array('id'=>$id.'selectedSongBox','style'=>'margin-bottom:0px;display:none'));					 
					
					$script['readyFunction']='$(document).ready(function (){%s});';
					$script['button']='$("#%s")
										.button()
										.click(function(){
											$("#%s").dialog("open");
											return false;
										});';
					$buttonScript.=sprintf($script['button'],$id.'btnSelectSong',$id.'dialog');										
					$songCombobox=$this->Autocomplate->combobox($name.'song_id',
																	array('id'=>$id.'song_id',																		  
																		  'label'=>false,
																		  'type'=>'text',
																		  'url'=>'songs/suggestSongs/',
																		  'onSelected'=>'loadSinger("'.$id.'",data);'
																	));
					$this->Jdialog->reset();
					$this->Jdialog->setId($id."dialog");
					$this->Jdialog->setTitle(__("Select Songs",true)." - ".($index+1));
					$this->Jdialog->addOption('autoOpen','false');			
					$this->Jdialog->addOption('modal','true');			
					$this->Jdialog->addButton(__("Confirm",true),'confrimSong("'.$id.'")');
					$this->Jdialog->addItem($songCombobox);			
					$this->Jdialog->addItem($this->Form->input('singers',array('id'=>$id.'singers',
						'options' => array(__('Select an Singer',true)),
						'div' => array('style'=>"display:inline-block;"),
					)));
					$this->Jdialog->addItem($this->Html->div('loading-singers',__('Loading Singers...',true),array('id'=>$id.'loading')));
//					$this->Jdialog->addOption('autoOpen','false');
					echo $this->Jdialog->create();																	
															
					$td.=sprintf($tag['td'],"",$index+1);
					$td.=sprintf($tag['td'],"",$programId.$programSection.$songsSingerId.$time);
					$td.=sprintf($tag['td'],"",$type);
					$td.=sprintf($tag['td'],"",$selectedSongBox.''.$songTypeId);						
					$tr.=sprintf($tag['tr'],$td);						
				}
				echo $tr;				
			?>
		</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Programs', true)), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program', true)), array('controller' => 'programs', 'action' => 'add')); ?> </li>
	</ul>
</div>

<?php
//$this->Html->script ('jquery/ui/jquery.ui.button', array ('inline' => false ) );
	echo $this->Autocomplate->loadScripts();
	echo $this->Autocomplate->printScript();
	echo $this->Jdialog->loadScripts();
	echo $this->Jdialog->printScript();
?>
<script type="text/javascript">
<?php echo sprintf($script['readyFunction'],$buttonScript);?>
function changeScheduleType(stId){
	var scheduleType="#"+stId+"scheduleType";
	var selectedSongBox="#"+stId+"selectedSongBox";
	var songType="#"+stId+"songType";
			
	if ($(scheduleType).val()== <?php echo SCHEDULE_TYPE_SONG?>){			
		$(selectedSongBox).fadeIn('slow');			 
	}else{			
		$(selectedSongBox).css('display','none');
	} 	 

	if ($(scheduleType).val()== <?php echo SCHEDULE_TYPE_INSTRUMENTAL?>){
		$(songType).css('margin-top','7px');
		$(songType).fadeIn('slow');		
	}else{
		$(songType).css('margin-top','0px');
		$(songType).css('display','none');			
	}
}
<?php echo $changeScheduleType;?>
/**
 * Selected Song and singer as songsSingerId.
 * 
 * @param string stId.
 */
function confrimSong(stId){
	var singerName=$("#"+stId+"singers :selected").text();
	var songName=$("#"+stId+"song_id").val();
	var songSingerId=$("#"+stId+"singers").val();	
	if (!isNaN(parseInt(songSingerId))){
		$("#"+stId+"songsSingerId").val($("#"+stId+"singers").val());				
//		console.log(songName + " - " + singerName + $("#"+stId+"songsSingerId").val());
		$("#"+stId+"songName").html(songName + " - " + singerName);
		$("#"+stId+'dialog').dialog('close');
	}else{
		alert("<?php __('Your selected song has not any singer.Please change the song.')?>");
	}
}
/**
 * load Song's Singer.It get Selected song in autocomplate and load it singers.
 * 
 * @param string stId
 * @param string data , contain information of selected song.(id,label,text)
 */
function loadSinger(stId,data){
	$("#"+stId+"loading").css("display","inline-block");
	$("#"+stId+"loading").fadeIn('slow', function () {
		$(this).css("display","inline-block");
	});	 
	$("#"+stId+"song_id").val(data.item.label);
	 
	$.getJSON(
		"<?php echo$this->webroot?>songsSingers/ajaxFindSongSingers/"+data.item.id, 
		function(j){									
			var options = '';									
			for (var i = 0; i < j.length; i++) {
				options += '<option value="' + j[i].id + '">' + j[i].value + '</option>';
			}
			$("#"+stId+"singers").html(options);
			$("#"+stId+"loading").fadeOut("slow");
		}
	);
}
</script>