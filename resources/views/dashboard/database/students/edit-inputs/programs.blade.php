                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROGRAMS</h5>

                        <div class="row">
                            <div class="col-md-4">

                                @foreach ($programs as $program)

                                <div class="form-check mb-1">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="programs[]"
                                        value="{{ $program->id }}"
                                        id="{{ $program->id }}"
                                        @foreach ($data_programs as $item)
                                            @if ($item ==  $data ) checked @endif
                                        @endforeach
                                    >
                                    <label class="form-check-label" for="{{ $program->id }}">

                                      {{ $program->program_title }} | {{ $program->id }}
                                    </label>
                                </div>
                                <!-- input group end -->

                                {{-- <div class="border d-block my-5 p-2">
                                    @php
                                        $data_programs = json_decode($data->programs);
                                    @endphp
                                    @foreach ($data_programs as $item)

                                    <li class="border p-2"> @php if($item == $program->id) { echo $program->id; } @endphp</li>
                                    @endforeach
                                </div> --}}

                                @endforeach

                            </div>

                        </div>

                        <button  type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save mr-1"></i> Save
                        </button>
                        <!-- submit button end -->
