<script>
    $(function() {
        $("#meta_keywords").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })

        $('#name').on('change', function() {
            var name = $(this).val();
            $('#meta_name').val(name);
        });
    });
</script>

<script>
    // Show Image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#category_image').hide();
                $('#category_image_plcaeholder')
                    .attr('src', e.target.result)
                    .width(200)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
