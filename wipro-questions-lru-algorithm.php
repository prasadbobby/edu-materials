<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Wipro</h6>
          </div>
       <div class="card-body">
           <p>The least recently used (LRU) cache algorithm exists the element from the cache(when it's full) that was least recently used. After an element is requested from the cache, it should be added to the cache (if not already there) and considered the most recently used element in the cache. Initially, the cache is empty. The input to the function lruCountMiss shall consist of an integer max_cache_size, an array pages and its length Len The function should return an integer for the number of cache misses using the LRU cache algorithm.</p>
           
              <p class="mb-0">
                        Sample Input-1 :- <br>
                        3 16<br>
                        7 0 1 2 0 3 0 4 2 3 0 3 2 1 2 0<br>
                        Sample Output-1 :- <br>
                        11</p><br>
              <p class="mb-0">
                        Sample Input-2 :- <br>
                        2 9<br>
                        2 3 1 3 2 1 4 3 2<br>
                        Sample Output 2:- <br>
                        8</p>
           </div>
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Source Code</h6>
            </div>
            <div data-pym-src="https://www.jdoodle.com/embed/v0/22b8?arg=0"></div>

  </div>
</div>
 <?php
include('includes/scripts.php');
include('includes/footer.php');
?>