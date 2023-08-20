@include('admin.menu')


          <!-- Form Start -->
          <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Creation candidats</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="sondage" class="form-label">Nom </label>
                                    <input type="text" class="form-control" id="titre"
                                        aria-describedby="titre" name="titre">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="sondage" class="form-label">Prenom </label>
                                    <input type="text" class="form-control" id="titre"
                                        aria-describedby="titre" name="titre">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="sondage" class="form-label">Description </label>
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type    ="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Form End -->


@include('admin.menuf')