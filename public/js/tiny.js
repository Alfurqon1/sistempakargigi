//tinymce
tinymce.init({
  // selector hanya butuh id dari input
  selector: "#isi_blog, #pengertian_penyakit, #penyebab, #sp_mandiri, #sp_spesifik",
  width: 1000,
  height: 400,

  plugins: [
    "advlist",
    "autolink",
    "link",
    "image",
    "lists",
    "charmap",
    "preview",
    "anchor",
    "pagebreak",
    "searchreplace",
    "wordcount",
    "visualblocks",
    "code",
    "fullscreen",
    "insertdatetime",
    "media",
    "table",
    "emoticons",
    "codesample",
  ],

  toolbar:
    "undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |" +
    "bullist numlist outdent indent",
  menu: {
    favs: { title: "menu", items: "code visualaid | searchreplace | emoticons" },
  },
  menubar: "favs file edit view insert format tools table",
  content_style: "body{font-family:Helvetica,Arial,sans-serif; font-size:16px}",
  style_formats: [
    {
      title: "Headers",
      items: [
        { title: "Heading 1", format: "h1" },
        { title: "Heading 2", format: "h2" },
        { title: "Heading 3", format: "h3" },
        // Tambahkan format elemen h1, h2, h3 sesuai kebutuhan
      ],
    },
  ],
});
