<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My app</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
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
    </body>
</html>
