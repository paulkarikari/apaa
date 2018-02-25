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
                        <button  @click="setUpEditForm(service)" class="btn btn-sm btn-primary mx-1" data-toggle="modal" data-target="#updateServiceModel">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                        <button @click="showDeleteForm(service)" class="btn btn-sm btn-danger mx-1"
                        data-toggle="modal" data-target="#deleteServiceModel">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
          </tbody>
                    <!-- delete service confirmation Modal -->
            <div class="modal fade" id="deleteServiceModel" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="deleteModalLabel">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"> 
                            <h2 class="text-center text-muted">
                                <i class="fa fa-question-circle-o" aria-hidden="true"></i></h2>
                            <h2 class="text-center text-muted">Are you Sure ?</h2>
                        </div>
                        <div class="modal-footer">
                            <div class="left-side">
                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <form  method="POST" :action="updateUrl">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" :value="csrfToken">
                                    <button type="submit" class="btn btn-danger btn-link">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- create service confirmation Modal -->
            <div class="modal fade" id="updateServiceModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form  method="POST" :action="updateUrl">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" :value="csrfToken">

                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="serviceModalLabel">
                                    Update service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <label>Name of Service</label>
                            <input required type="text" v-model="servicesData.service_name" name="service_name" class="form-control" 
                            placeholder="Enter Service Name">
                            <br />
                            <label>Description</label>
                            <textarea required class="form-control" v-model="servicesData.description" name="description" rows="3" placeholder="Describe you service"></textarea>
                            <br />
                            <label>Category</label>
                            <select reguired class="form-control" v-model="servicesData.category_id" name="category_id">
                                    <option v-for="category in categories" :value="category.id" :key="category.id">
                                        {{category.category_name}}
                                    </option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="left-side">
                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <button type="submit" class="btn btn-success btn-link">Update Service</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
  </table>
  
</template>

<script>
    export default {
        mounted() {
            console.log('service table mounted')
        },
        props: ['services','categories','csrfToken'],
        data () {
            return {
                servicesData: {
                    service_name: '',
                    description: '',
                    category_id: 1
                },
                baseUrl: '/services/',
                updateUrl: ''
            }
        },
        methods: {
            setUpEditForm (service) {
                this.updateUrl = this.baseUrl + service.id
                this.servicesData = _.cloneDeep(service)
            },
            showDeleteForm (service) {
                this.updateUrl = this.baseUrl + service.id
            }
        }
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

