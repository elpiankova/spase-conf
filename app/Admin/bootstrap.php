<?php

/*
 * Describe you custom displays, columns and form items here.
 *
 *		Display::register('customDisplay', '\Foo\Bar\MyCustomDisplay');
 *
 *		Column::register('customColumn', '\Foo\Bar\MyCustomColumn');
 *
 * 		FormItem::register('customElement', \Foo\Bar\MyCustomElement::class);
 *
 */

    FormItem::register('myItem', function ($instance) {
        if ($instance->exists) {
            return 'You are editing existing entity.';
        } else {
            return 'You are creating new entity.';
        }
    });

