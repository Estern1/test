@extends('layouts.page')

@section('content')
    <div id="gender"></div>

    <div class="form">
        <form>
            <div>
                <label for="name">{{ __('Name') }}
                    <input type="text" name="name">
                </label>
            </div>
            <div>
                <label for="country">{{ __('Country') }}
                    <select name="country_id">
                        @foreach ($countries as $country)
                            <option value="{{ $country['alpha2Code'] }}">{{ __($country['name']) }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <button type="button" id="submitForm">
                {{  __('Submit') }}
            </button>
        </form>
    </div>
@endsection
