<table>
<thead>
  <tr>
    <th></th>
    <th>Node 1  
<br>(192.168.0.2)</th>
    <th>Node 2  
<br>(192.168.0.3)</th>
    <th>Node 3  
<br>(192.168.0.4)</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>redis.conf</td>
    <td>
<br>protected-mode no  
<br>port 6380  
<br>requirepass secretPassword  
<br>masterauth  secretPassword  
<br>dir /media/storage/var/opt/redis-stable/data/  
<br>logfile /media/storage/var/opt/redis-stable/redis.log</td>
    <td>
<br>protected-mode no  
<br>port 6381  
<br>requirepass secretPassword  
<br>masterauth  secretPassword  
<br>dir /media/storage/var/opt/redis-stable/data/  
<br><span style="color:red">slaveof 192.168.0.2 </span>
<br>logfile /media/storage/var/opt/redis-stable/redis.log</td>
    <td>
<br>protected-mode no  
<br>port 6382  
<br>requirepass secretPassword  
<br>masterauth  secretPassword  
<br>dir /media/storage/var/opt/redis-stable/data/  
<br><span style="color:blue">slaveof 192.168.0.2</span>  
<br>logfile /media/storage/var/opt/redis-stable/redis.log</td>
  </tr>
  <tr>
    <td>sentinel.conf</td>
    <td>
<br>protected-mode no  
<br>port 26380  
<br><b>sentinel monitor mymaster 192.168.0.2 6380 2</b>  
<br>sentinel down-after-milliseconds mymaster 5000  
<br>sentinel failover-timeout mymaster 10000  
<br>logfile "/media/storage/var/opt/redis-stable/sentinel.log"</td>
    <td>
<br>protected-mode no  
<br>port 26380  
<br><b>sentinel monitor mymaster 192.168.0.2 6380 2 </b>
<br>sentinel down-after-milliseconds mymaster 5000  
<br>sentinel failover-timeout mymaster 10000  
<br>logfile "/media/storage/var/opt/redis-stable/sentinel.log"</td>
    <td>
<br>protected-mode no  
<br>port 26380  
<br><b>sentinel monitor mymaster 192.168.0.2 6380 2</b> 
<br>sentinel down-after-milliseconds mymaster 5000  
<br>sentinel failover-timeout mymaster 10000  
<br>logfile "/media/storage/var/opt/redis-stable/sentinel.log"</td>
  </tr>
</tbody>
</table>
