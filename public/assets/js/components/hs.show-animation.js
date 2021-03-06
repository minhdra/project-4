(function ($) {
  'use strict';
  $.HSCore.components.HSShowAnimation = {
    _baseConfig: { afterShow: function () {} },
    pageCollection: $(),
    init: function (selector, config) {
      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;
      this.config =
        config && $.isPlainObject(config)
          ? $.extend({}, this._baseConfig, config)
          : this._baseConfig;
      this.config.itemSelector = selector;
      this.initShowEffect();
      return this.pageCollection;
    },
    initShowEffect: function () {
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;
      this.collection.each(function (i, el) {
        var $this = $(el),
          linkGroup = $this.data('link-group'),
          $target = $($this.data('target')),
          targetGroup = $target.data('target-group'),
          animateIn = $this.data('animation-in');
        $this.on('click', function (e) {
          e.preventDefault();
          if ($(this).hasClass('active')) return;
          $('[data-link-group="' + linkGroup + '"]').removeClass('active');
          $this.addClass('active');
          if (animateIn) {
            $self.addAnimation($target, targetGroup, animateIn, config);
          } else {
            $self.hideShow($target, targetGroup, config);
          }
        });
        collection = collection.add($this);
      });
    },
    hideShow: function (target, targetgroup, config) {
      $('[data-target-group="' + targetgroup + '"]')
        .hide()
        .css('opacity', 0);
      target.show().css('opacity', 1);
      config.afterShow();
    },
    addAnimation: function (target, targetgroup, animatein, config) {
      $('[data-target-group="' + targetgroup + '"]')
        .hide()
        .css('opacity', 0)
        .removeClass('animated ' + animatein);
      target.show();
      config.afterShow();
      setTimeout(function () {
        target.css('opacity', 1).addClass('animated ' + animatein);
      }, 50);
    },
  };
})(jQuery);
