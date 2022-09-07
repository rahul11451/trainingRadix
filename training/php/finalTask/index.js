CKEDITOR.ClassicEditor.create(document.getElementById("editor1"), {
    toolbar: {
        items: [
            'CKFinder', 'CKBox', 'exportPDF', 'exportWord', '|',
            'findAndReplace', 'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
            'textPartLanguage', '|',
            'sourceEditing'
        ],
        removeItems: ['fontColor', 'fontBackgroundColor', 'bold'],
        shouldNotGroupWhenFull: true
    },
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true
        }
    },
    heading: {
        options: [{
            model: 'paragraph',
            title: 'Paragraph',
            class: 'ck-heading_paragraph'
        },
        {
            model: 'heading1',
            view: 'h1',
            title: 'Heading 1',
            class: 'ck-heading_heading1'
        },
        {
            model: 'heading2',
            view: 'h2',
            title: 'Heading 2',
            class: 'ck-heading_heading2'
        },
        {
            model: 'heading3',
            view: 'h3',
            title: 'Heading 3',
            class: 'ck-heading_heading3'
        },
        {
            model: 'heading4',
            view: 'h4',
            title: 'Heading 4',
            class: 'ck-heading_heading4'
        },
        {
            model: 'heading5',
            view: 'h5',
            title: 'Heading 5',
            class: 'ck-heading_heading5'
        },
        {
            model: 'heading6',
            view: 'h6',
            title: 'Heading 6',
            class: 'ck-heading_heading6'
        }
        ]
    },
    fontFamily: {
        options: [
            'default',
            'Arial, Helvetica, sans-serif',
            'Courier New, Courier, monospace',
            'Georgia, serif',
            'Lucida Sans Unicode, Lucida Grande, sans-serif',
            'Tahoma, Geneva, sans-serif',
            'Times New Roman, Times, serif',
            'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
    },
    fontSize: {
        options: [10, 12, 14, 'default', 18, 20, 22],
        supportAllValues: true
    },
    htmlSupport: {
        allow: [{
            name: /.*/,
            attributes: true,
            classes: true,
            styles: true
        }]
    },
    htmlEmbed: {
        showPreviews: true
    },
    link: {
        decorators: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    mention: {
        feeds: [{
            marker: '@',
            feed: [
                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                '@sugar', '@sweet', '@topping', '@wafer'
            ],
            minimumCharacters: 1
        }]
    },
    removePlugins: [
        // 'ExportPdf',
        // 'ExportWord',
        // 'CKBox',
        // 'CKFinder',
        'EasyImage',
        // 'Base64UploadAdapter',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        'MathType'
    ]
});

$(document).ready(function () {

    // on edit
    $('.edit').click(function (e) {
        var nId = $(this).attr('id');
        window.location.href = "http://nensi.localhost///php/finalTask/index.php?nId=" + nId;
    });

    // on delete
    $('.delete').click(function (e) {

        if (confirm('Are you Sure to delete this details?')) {
            var nId = $(this).attr('id');

            $.ajax({
                type: "post",
                data: {
                    'action': 'delete',
                    'nId': nId
                },
                success: function (response) {
                    if (response == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Deleted successfully',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        window.location.href = "http://nensi.localhost///php/finalTask/index.php";
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Data is not delete',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                }
            });
        }
    });

    // on EMail
    $('.email').click(function (e) {
        if (confirm('Are you Sure to send the mail?')) {
            var nId = $(this).attr('id');

            $.ajax({
                type: "post",
                data: {
                    'action': 'emailSend',
                    'nId': nId
                },
                success: function (response) {
                    if (response == 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Email has been sent',
                            showConfirmButton: false,
                            timer: 3000
                        });
                      } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Email has not been sent',
                            showConfirmButton: false,
                            timer: 3000
                        });
                      }
                }
            });
        }
    });
});