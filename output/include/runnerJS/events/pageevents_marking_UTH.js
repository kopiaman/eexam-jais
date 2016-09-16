
Runner.pages.PageSettings.addPageEvent("marking_UTH",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE_WINDOW4';if(!pageObj.buttonEventBefore['CLOSE_WINDOW4']){pageObj.buttonEventBefore['CLOSE_WINDOW4']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE_WINDOW4']){pageObj.buttonEventAfter['CLOSE_WINDOW4']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE_WINDOW4]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE_WINDOW4"+"_"+Runner.genId();var button_CLOSE_WINDOW4=new Runner.form.Button({id:this.id,btnName:"CLOSE_WINDOW4"});button_CLOSE_WINDOW4.init({args:[pageObj,proxy,pageid]});});});