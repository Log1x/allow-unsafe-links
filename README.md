# Allow Unsafe Links

[![Latest Stable Version](https://poser.pugx.org/log1x/allow-unsafe-links/v/stable)](https://packagist.org/packages/log1x/allow-unsafe-links) 
[![Total Downloads](https://poser.pugx.org/log1x/allow-unsafe-links/downloads)](https://packagist.org/packages/log1x/allow-unsafe-links)

Starting in WordPress 4.7.4 and 5.1, WordPress now automatically adds `rel="noopener noreferrer` to external links that open in a new window (e.g. `_blank`) when adding a link from TinyMCE (4.7.4) as well as on post save (5.1). With the introduction of it passing your content through a filter on post save, it is no longer possible to publish a post without the tags even when manually removing them.

While I 100% endorse this behavior deeming the potential [security concerns](https://developers.google.com/web/tools/lighthouse/audits/noopener) when not including these tags (especially `noopener`), this can lead to unwanted behavior on URL's such as affiliate and referral links due to a variety of networks poor implementation of tracking.

If you are not using an advertiser network that has the potential issues stated above, **you should not be using this**. Otherwise, please use this with caution and for the safety of you and your users, please add `rel="noopener noreferrer"` on outbound links manually that are not affiliate-related.

## Installation

### Composer 

```sh
$ composer require log1x/allow-unsafe-links
```

### Manually

[Download](https://github.com/log1x/allow-unsafe-links/archive/v1.0.1.zip) and install the plugin as you would any other WordPress plugin.

## Usage

Once activated, you're good to go. For existing posts, you will need to go through and manually remove the `rel="noopener noreferrer"` on your URL's and re-save.

This can also be done via [`wp-cli`](https://wp-cli.org/) using `search-replace` such as:

```sh
$ wp search-replace ' rel="noopener noreferrer" ' ''
```

## License

Allow Unsafe Links is provided under the [MIT License](https://github.com/Log1x/allow-unsafe-links/blob/master/LICENSE.md).
