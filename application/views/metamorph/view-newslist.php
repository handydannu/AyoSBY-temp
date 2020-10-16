<div class="col-lg-8 col-sm-12 mt-3">

  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-arrow p-0">
      <li class="breadcrumb-item"><a href="#" class="text-uppercase pl-3">Home</a></li>
      <li class="breadcrumb-item pl-0"><a href="#" class="text-uppercase">Library</a></li>
      <li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">surabaya</li>
    </ol>
  </nav><!-- breadcrumb -->

    <h4 class="pt-2 mml-1">
      <a class="roll-link" href="#"><span data-title="LAINNYA >>"><i class="far fa-newspaper"></i> PERSEBAYA</span></a>
    </h4>

  <div class="row">
    <!-- list berita -->
    
          <?php  
            for ($x = 1; $x <= 15; $x++) {
              echo "
              <div class='col-lg-4 col-sm-4 p-1'>
                  <a href='#'><img class='img-fluid headline-img-sm shade float-left' src='https://www.ayosurabaya.com/images-surabaya/post/articles/2020/09/28/3226/daun_ga,bir.jpg' alt='...'></a>
              </div>
              <div class='col-lg-8 col-sm-8 pl-2 mt-1'>            
                <span class='sub-head-cat'><a href='#' class='sub-head-box'>NASIONAL</a></span> 
                <span class='sub-head-date'><i class='fas fa-clock'></i> 12 September</span>        
                <p class='mt-2'>
                  <a class='sub-head-18' href='#'>lorem ipsum sit amet dolor lorem ipsum sit amet dolor lorem ipsum</a>
                </p>
              </div><!-- number 1 -->
              <div class='col-lg-12'><hr class='lb-0'></div>       
              ";
            }
          ?>  

  </div><!-- list berita -->

  <nav class="pagination-outer mt-3" aria-label="Page navigation">
  <ul class="pagination">
      <li class="page-item">
          <a href="#" class="page-link" aria-label="SEBELUMNYA">
              <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
          </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
          <a href="#" class="page-link" aria-label="SELANJUTNYA">
              <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
          </a>
      </li>
  </ul>
  </nav>

</div>