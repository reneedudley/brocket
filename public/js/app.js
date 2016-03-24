'use strict';

console.log('hello');

var TagModel = Backbone.Model.extend({
	urlRoot: '/tags'
});

var TagsCollection = Backbone.Collection.extend({
	url: "/tags",
	Model:"TagModel"
});

var BookmarkModel = Backbone.Model.extend({
	urlRoot: '/bookmarks'
});

var BookmarksCollection = Backbone.Collection.extend({
	url:"/bookmarks",
	Model: "BookmarkModel"
});
