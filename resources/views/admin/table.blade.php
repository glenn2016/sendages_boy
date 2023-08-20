@include('admin.menu')

            <!-- Table Start -->

                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Sexe</th>
                                            <th scope="col">ville</th>
                                            <th scope="col">numerotel</th>
                                            <th scope="col">action</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($simpleUsers as $user)
                                  
                                        
                                        <tr>
                                            <th scope="row">
                                                <img class="rounded-circle" src="images/{{ $user['images'] }}" alt="" style="width: 40px; height: 40px;">
                                            </th>
                                            <td>{{ $user['name'] }} </td>
                                            <td>{{ $user['firstname'] }}</td>
                                            <td>{{ $user['email'] }}</td>
                                            <td>{{ $user['sexe'] }}</td>
                                            <td>{{ $user['ville'] }}</td>
                                            <td>{{ $user['numerotel'] }}</td>
                                            <td>
                                            <form method="post" action="{{route('destroy_User',['id'=>$user->id])}}">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        @include('admin.menuf')