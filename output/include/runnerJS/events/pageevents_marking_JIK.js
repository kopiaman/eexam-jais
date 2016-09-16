
Runner.pages.PageSettings.addPageEvent("marking_JIK",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE_WINDOW1';if(!pageObj.buttonEventBefore['CLOSE_WINDOW1']){pageObj.buttonEventBefore['CLOSE_WINDOW1']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE_WINDOW1']){pageObj.buttonEventAfter['CLOSE_WINDOW1']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE_WINDOW1]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE_WINDOW1"+"_"+Runner.genId();var button_CLOSE_WINDOW1=new Runner.form.Button({id:this.id,btnName:"CLOSE_WINDOW1"});button_CLOSE_WINDOW1.init({args:[pageObj,proxy,pageid]});});});