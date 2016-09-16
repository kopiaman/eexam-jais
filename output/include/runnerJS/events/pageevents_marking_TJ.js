
Runner.pages.PageSettings.addPageEvent("marking_TJ",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE_WINDOW3';if(!pageObj.buttonEventBefore['CLOSE_WINDOW3']){pageObj.buttonEventBefore['CLOSE_WINDOW3']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE_WINDOW3']){pageObj.buttonEventAfter['CLOSE_WINDOW3']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE_WINDOW3]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE_WINDOW3"+"_"+Runner.genId();var button_CLOSE_WINDOW3=new Runner.form.Button({id:this.id,btnName:"CLOSE_WINDOW3"});button_CLOSE_WINDOW3.init({args:[pageObj,proxy,pageid]});});});