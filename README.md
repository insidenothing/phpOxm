phpOxm
======

PHP controlls for Xen VM, Integrated with Monit / Cron




Keep Up to Date
--------------------
  # @midnight - /root/phpOxm/update.sh > /dev/null 2>&1 

Keep VMs Online  
------------------  
  # @15min  - /root/phpOxm/monitor.sh > /dev/null 2>&1 



_______________________

This keeps all VM's up and running ( as long as there is no other event ) since XM only auto-boots on startup.



@todo add routine for destroy/create cycle.
