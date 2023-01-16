<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <x:form::input type="file" name="avatar"/>
    <x:form::input name="first_name"/>
    <x:form::input type="email" name="email"/>
    ...
    <x:form::textarea name="biography" :locales="['en']"/>

    <x:form::form>
        ...
        <div class="d-grid">
            <x:form::button.submit>Submit this form</x:form::submit> {{-- Will provide `btn-primary` class with Bootstrap UI --}}
                <x:form::button.link class="btn-secondary" href="{{ back() }}"> {{-- Will auto-generate `title="Back"` --}}
                    <i class="fas fa-undo fa-fw"></i>
                    Back
                    </x:form::submit>
        </div>
    </x:form::form>

    </body>
</html>
