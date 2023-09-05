document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
 window.theme = window.theme || {};
 theme.routes = {
   home: "/",
   cart: "/cart.js",
   cartPage: "/cart",
   cartAdd: "/cart/add.js",
   cartChange: "/cart/change.js",
   search: "/search"
 };
 theme.strings = {
   soldOut: "Sold Out",
   unavailable: "Unavailable",
   inStockLabel: "In stock, ready to ship",
   stockLabel: "Low stock - [count] items left",
   willNotShipUntil: "Ready to ship [date]",
   willBeInStockAfter: "Back in stock [date]",
   waitingForStock: "Inventory on the way",
   savePrice: "Save [saved_amount]",
   cartEmpty: "Your cart is currently empty.",
   cartTermsConfirmation: "You must agree with the terms and conditions of sales to check out",
   searchCollections: "Collections:",
   searchPages: "Pages:",
   searchArticles: "Articles:"
 };
 theme.settings = {
   dynamicVariantsEnable: true,
   cartType: "drawer",
   isCustomerTemplate: false,
   moneyFormat: "${{amount}}",
   saveType: "dollar",
   productImageSize: "natural",
   productImageCover: false,
   predictiveSearch: true,
   predictiveSearchType: "product,article,page,collection",
   quickView: false,
   themeName: 'Impulse',
   themeVersion: "5.3.0"
 };

 (function() {
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.en.8f0cf5c2713531ebe053.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/809.baseline.en.f398d37a1955c4eb6e20.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/810.baseline.en.d3de5a49b3f490317ed3.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/Information.baseline.en.b2bcf0248cd39c4697ad.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/2.baseline.en.b2d4c3c74738423c2e20.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/822.baseline.en.45d671be1a3eed8e4855.js", "../cdn.shopify.com/shopifycloud/checkout-web/assets/27.baseline.en.eeda654330ad3594fae5.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.c8214ab891e25920eb72.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/2.baseline.en.fbd7be0b0e24601ba18d.css", "../cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.4908dff065d1f3c9150a.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/739.baseline.en.b2c9d674f6c0bb0b1fe4.css"];

    function prefetch(url, as, callback) {
      var link = document.createElement('link');
      if (link.relList.supports('prefetch')) {
        link.rel = 'prefetch';
        link.fetchPriority = 'low';
        link.as = as;
        link.href = url;
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('GET.html', url, true);
        xhr.onloadend = callback;
        xhr.send();
      }
    }

    function prefetchAssets() {
      var resources = [].concat(
        scripts.map(function(url) { return [url, 'script']; }),
        styles.map(function(url) { return [url, 'style']; })
      );
      var index = 0;
      (function next() {
        var res = resources[index++];
        if (res) prefetch(res[0], res[1], next);
      })();
    }

    addEventListener('load', prefetchAssets);
   })();