@if($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $item)
                                <li><div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                  <span class="font-medium">{{ $item }}</span></div></li>
                            @endforeach
                          </ul>
                        </div>
                        @endif

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                              <ul>
                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                  <span class="font-medium">
                                {{ Session::get('success') }}
                                  </span>
                                </div>
                              </ul>
                            </div>
                        @endif