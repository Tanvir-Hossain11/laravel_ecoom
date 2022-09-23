<x-admin.master>

  <x-slot:title>
        Category List
        </x-slot>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h4 class="card-title">Product Category List</h4>

                                    <table class="table table-striped bg-light text-dark borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th> Product Category </th>

                                                <th colspan="2"> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Snikers </td>
                                                <td class="btn btn-info"> <a href="{{route('category_edit')}}">Show </a> </td>
                                                <td class="btn btn-info"> <a href="{{route('category_edit')}}">Edit </a> </td>

                                                <td class="btn btn-danger">Delete</td>
                                            </tr>
                                            <tr>
                                                <td> Snikers </td>
                                                <td class="btn btn-info"> <a href="categoryedit.html">Edit </a> </td>

                                                <td class="btn btn-danger">Delete</td>
                                            </tr>
                                            <tr>
                                                <td> Snikers </td>
                                                <td class="btn btn-info"> <a href="categoryedit.html">Edit </a> </td>

                                                <td class="btn btn-danger">Delete</td>
                                            </tr>
                                            <tr>
                                                <td> Snikers </td>
                                                <td class="btn btn-info"> <a href="categoryedit.html">Edit </a> </td>

                                                <td class="btn btn-danger">Delete</td>
                                            </tr>
                                            <tr>
                                                <td> Snikers </td>
                                                <td class="btn btn-info"> <a href="categoryedit.html">Edit </a> </td>

                                                <td class="btn btn-danger">Delete</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  </x-admin.master>