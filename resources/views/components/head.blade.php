
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="{{asset('file/image/logo/svg/logo.svg')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>{{config('app.name')}}</title>
<script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
</script>
<style type="text/tailwindcss">
    @layer utilities {
        .content-auto {
            content-visibility: auto;
        }
    }
</style>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
