var Fruits = function (config) {
	config = config || {};
	Fruits.superclass.constructor.call(this, config);
};
Ext.extend(Fruits, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('fruits', Fruits);

Fruits = new Fruits();