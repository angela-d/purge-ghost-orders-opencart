# Purge Ghost Orders v1.0
For Open Cart 2.3.0.2

* OCMOD install
* No technical skill required
* No configuration; it works it's magic behind the scenes

<a href="https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=33640"><img alt="ghost orders icon" align="right" src="./img/purge-ghost-orders.png" style="border:0;"></a>

Shop owners that utilize one page checkout extensions on the Open Cart platform will find a lot of "ghost orders" or "missing orders" in their system; such records aren't immediately an issue, until you begin utilizing an extension such as [Abandoned Carts Recovery](https://github.com/z0m8i3/abandoned-carts-opencart) -- then you start to realize the scale of which these unnecessary entries cover your system.

### How to Spot Them ###
While utilizing something like Abandoned Carts, you'll see a lot of "duplicate" records for a user's IP address, that aren't tied to anything else, begin to surface.  This is because one page checkout extensions load asynchronously for field validation to retain the "one page" seamlessness.

A 'template' is created anytime a user lands on the checkout page and waits for user interaction.  If the user leaves to continue shopping, another record will be created once they return.  Even if the user bails and never enters any information; the template record is still created and waits for user input.

You can also spot them by going into a database management tool like phpmyadmin and sorting your `orders` table alphabetically by first or lastname.


### Why they May be An Issue ###
If you have a busy store, these records can build tremendous bloat in your database.
Chances are, they will never be called upon so think of it as having thousands, if not millions - of redundant products in your shopping cart system.

### Benefits to Getting Rid of Them ###
* The size of your database will shrink; when you do your nightly or weekly backups, the time it takes to compress and get a local copy of the database will shrink drastically.

* Less is more; the less (useless) records a system has, the less resource usage and work it has to do to sift through and find what it's looking for.  Improvements would be most noticeable on large and busy stores.


## [:link: Install Instructions](installing-instructions.md) ##


## Usage ##

Because this extension modifies your database, ***PLEASE*** backup your database before you install it.  Although it's been tested, you'll want a backup of your shop's database in the event something goes wrong (other extensions colliding are a distinct possibility).

There is no configuration.  Install the extension, refresh your modifications cache and log out (then log back in).

The extension will begin it's clean up duties behind the scenes.

The deletions are set to *only* delete records that are at least 1 day old and must also meet the criteria of *both* a blank first & last name (which is indicative that the record was created by the one page checkout addon); to ensure no other statuses or potentially legitimate transactions get caught.

The extension will continue to look for new deletions anytime an admin creates a new login session; no interaction is ever required.

***

If this plugin is beneficial for you & you'd like to contribute to future development, [buy me a coffee](https://www.paypal.me/z0m8i3)! :smile: :coffee:

| PayPal | LiberaPay |
| --- | --- |
| [![paypal](./img/paypal.png)](https://www.paypal.me/z0m8i3) |  [![liberapay](./img/liberapay.svg)](https://liberapay.com/~34984/donate)
