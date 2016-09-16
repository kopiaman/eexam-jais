
Runner.pages.PageSettings.addPageEvent("marking_TF",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE_WINDOW2';if(!pageObj.buttonEventBefore['CLOSE_WINDOW2']){pageObj.buttonEventBefore['CLOSE_WINDOW2']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE_WINDOW2']){pageObj.buttonEventAfter['CLOSE_WINDOW2']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE_WINDOW2]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE_WINDOW2"+"_"+Runner.genId();var button_CLOSE_WINDOW2=new Runner.form.Button({id:this.id,btnName:"CLOSE_WINDOW2"});button_CLOSE_WINDOW2.init({args:[pageObj,proxy,pageid]});});});