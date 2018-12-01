<div class="row">
  <div class="col-6">

<nav aria-label="Page navigation">
  <ul class="pagination">
    <!-- |<<  -->
    <li class="page-item" v-bind:class="{'disabled':registros.current_page == 1}">
      <a class="page-link" href="#" aria-label="Previous" v-on:click="buscarEstoque(registros.fist_page_url)">
       <i class="fa fa-fast-backward" aria-hidden="true"></i>

      </a>
    </li>
    <!-- |<  -->
    <li class="page-item" v-bind:class="{'disabled':registros.current_page == 1}">
      <a class="page-link" href="#" v-on:click="buscarEstoque(registros.prev_page_url)">
      <i class="fa fa-step-backward" aria-hidden="true"></i>
    </a></li>
    <!-- 1/1  -->
    <li class="page-item">
      <a class="page-link" href="#">
    @{{registros.current_page}}/@{{registros.last_page}}</a></li>
    <!-- >|  -->
    <li class="page-item" v-bind:class="{'disabled':registros.current_page == registros.last_page}">
      <a class="page-link" href="#" v-on:click="buscarEstoque(registros.next_page_url)">
   <i class="fa fa-step-forward" aria-hidden="true"></i>
    </a></li>
    <!-- >>|  -->
    <li class="page-item" v-bind:class="{'disabled':registros.current_page == registros.last_page}">
      <a class="page-link" href="#" aria-label="Next" v-on:click="buscarEstoque(registros.last_page_url)">
        <i class="fa fa-fast-forward" aria-hidden="true"></i>
      </a>
    </li>
  </ul>

</nav>
</div>
</div>
