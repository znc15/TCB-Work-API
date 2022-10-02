var $ = mdui.$;
var inst = new mdui.Drawer('#drawer');

// method
$('#open').on('click', function () {
  inst.open();
});

$('#close').on('click', function () {
  inst.close();
});

$('#toggle').on('click', function () {
  inst.toggle();
});

$('#getState').on('click', function () {
  mdui.alert(inst.getState());
});

// event
$('#drawer').on('open.mdui.drawer', function () {
  console.log('open');
});

$('#drawer').on('opened.mdui.drawer', function () {
  console.log('opened');
});

$('#drawer').on('close.mdui.drawer', function () {
  console.log('close');
});

$('#drawer').on('closed.mdui.drawer', function () {
  console.log('closed');
});