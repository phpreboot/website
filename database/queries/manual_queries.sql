-- Since we do not have admin panel, we need to run following queries manually.
-- Add this file just for records.
-- Later, we need to add option to run this file through command or in some easy way.

-- issue - Hotfix 161.
update websites set noc='remove' where site_url = 'alanstorm.com';

-- Based on other permissions (approval.txt) as of 10th November 2016.
update websites set noc='iframe' where site_url = 'codeutopia.net';
update websites set noc='iframe' where site_url = 'ma.ttias.be';
update websites set noc='link' where site_url = 'sitepoint.com';
