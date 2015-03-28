Fruits.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'fruits-panel-home', renderTo: 'fruits-panel-home-div'
		}]
	});
	Fruits.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Fruits.page.Home, MODx.Component);
Ext.reg('fruits-page-home', Fruits.page.Home);