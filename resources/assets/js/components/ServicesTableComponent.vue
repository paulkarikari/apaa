<template>
   <table id="data-table" class="table table-striped table-borderd table-hover table-responsive">
      <thead class="thead-default">
          <tr>
              <th>No.</th>
              <th>Service Name</th>
              <th>Desecription</th>
              <th>Category</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
                    <tr v-for="(service, $index) in services" :key="service.id">
                        <td>{{$index + 1}}</td>
                        <td>{{service.service_name}}</td>
                        <td>{{service.description}}</td>
                        <td>{{service.category.category_name}}</td>
                        <td class="actions d-flex">
                            <button  class="btn btn-sm btn-primary mx-1" data-toggle="modal" data-target="#updateServiceModel">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </button>
                            <a href="#delete" class="btn btn-sm btn-danger mx-1">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
          </tbody>
                    <!-- launch create service Modal -->
            <div class="modal fade" id="updateServiceModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Update Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                        </div>
                        <div class="modal-footer">
                            <div class="left-side">
                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <button type="button" class="btn btn-danger btn-link">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </table>
  
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            console.log(this.services)
        },
        props: ['services'],
        /* data () {
            return {
                servicesData: null
            }
        } */
    }
</script>
<style scoped>
#data-table > tbody > tr > td.actions { 
	zoom: 1;
    filter: alpha(opacity=0);
	opacity: 0;
}
#data-table > tbody > tr:hover > td.actions {
    zoom: 1;
    filter: alpha(opacity=100);
	opacity: 1;
 }
</style>

