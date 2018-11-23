
            <div class="container border text-center" style="border-radius:10px;padding: 0; margin-bottom: 20px">

                <h4 class="cardheader" style="color: white">{{ __('Create Notifications') }}</h4>
                <div class="container">

                    <form method="POST" action="/adds_creating">
                      {{ csrf_field() }}

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="title"><b>{{ __('Title') }}</b></label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="body"><b>{{ __('Notification') }}</b></label>
                                </div>
                                <div class="col-md-10">
                                    <textarea id="body" name="body" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>

                    </form>
                    </div>

                </div>
            

