phpOxm
======

PHP controlls for Xen VM, Integrated with Monit / Cron




I run 2 cron jobs
1. @midnight - /root/phpOxm/update.sh > /dev/null 2>&1 
2. @hourly  - /root/phpOxm/monitor.sh > /dev/null 2>&1 




This keeps all VM's up and running ( as long as there is no other event ) since XM only auto-boots on startup.



@todo add routine for destroy/create cycle.
