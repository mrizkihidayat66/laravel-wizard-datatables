@props(['type', 'class' => ''])

@if (session($type) || ($type == 'error' && $errors->any()))

                            <div class="alert alert-{{ $type == 'error' ? 'danger' : $type }} alert-dismissible fade show {{ $class }}" role="alert">
                                <div class="alert-title">
                                    {{ ucfirst($type) }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                @if ($type == 'error' && $errors->any())

                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                                @else

                                    {{ session($type) }}
                                @endif

                            </div>
@endif
