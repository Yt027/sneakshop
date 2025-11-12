document.addEventListener('DOMContentLoaded', () => {
  const Templates = document.getElementById('templates')

  // Image Upload Start
  const imageUploader = document.getElementById('product-images')
  const imagePreviewer = document.querySelector('.product .images .galery')

  imageUploader.addEventListener('change', event => {
    let files = [...event.target.files]

    imagePreviewer.innerHTML = ''
    files.forEach((file, id) => {
      const reader = new FileReader()
      reader.onload = e => {
        let src = e.target.result

        // Cloning Galery Item structure
        let item = Templates.content
          .querySelector('.product-galery-item')
          .cloneNode(true)
        item.querySelector('img').src = src

        // Changing Main Image on item clicks
        item.onclick = () => {
          document.querySelector('.main-image img').src = src
        }

        // Setting Main Image to first galery image
        if (id === 0) {
          document.querySelector('.main-image img').src = src
        }

        imagePreviewer.append(item)
      }
      reader.readAsDataURL(file)
    })
  })
  // Image Upload End

  // Caracteristics Preview Start
  const caracteristicPreviewer = document.querySelector(
    '.product .content .caracteristics .preview'
  )
  document
    .querySelector('form .content .caracteristics input')
    .addEventListener('input', (e) => {
      getCaracteristicsFromData();
    })

  function getCaracteristicsFromData() {
    caracteristicPreviewer.innerHTML = ''

    let content = document.querySelector(
      'form .content .caracteristics input'
    ).value

    // Extract Data only when the Div is empty
    if (!content.length == 0) {
      let data = content.split('|')

      data.forEach(element => {
        caracteristicPreviewer.innerHTML += `<span class="item">${element}</span>`
      })
    }
  }

  getCaracteristicsFromData()
  // Caracteristics Preview End

  // Large Description Start
  // Managing post content editor's reactions
  const postContentEditor = document.getElementById('content-editor')
  const postContent = document.getElementById('content')

  // Add focus class when the editor is focused
  postContentEditor.addEventListener('focusin', () => {
    postContentEditor.classList.add('focus')
  })

  // Remove focus class when the editor loses focus or is empty
  postContentEditor.addEventListener('focusout', () => {
    if (
      postContentEditor.innerHTML == '<br>' ||
      postContentEditor.innerHTML == ''
    )
      postContentEditor.classList.remove('focus')
  })

  // Update the hidden textarea with the content of the editor
  postContentEditor.addEventListener('input', () => {
    postContent.value = postContentEditor.innerHTML
    console.log(postContent.value)
  })

  // Managing tools actions
  const tools = document.querySelectorAll('form .large-desc .tools .btn')

  // Add event listeners to each tool button
  tools.forEach(tool => {
    tool.addEventListener('click', event => {
      var command = tool.dataset['element']

      // Handle special commands like creating links or inserting images
      document.execCommand(command, false, null)
    })
  })
  // Large Description End

  // Edit product images loading Start
  if (productImages && productImages.length > 0) {
    loadImagesFromUrls(productImages);
  }

  async function loadImagesFromUrls(urls) {
    const dataTransfer = new DataTransfer();

    for (const url of urls) {
      const response = await fetch(url);
      const blob = await response.blob();
      const filename = url.split('/').pop();
      const file = new File([blob], filename, { type: blob.type });
      dataTransfer.items.add(file);
    }

    imageUploader.files = dataTransfer.files;
  }
  // Edit product images loading End
})
