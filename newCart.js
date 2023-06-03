
let objList = JSON.parse(localStorage.getItem("objList"))
let div = document.createElement('div')
div.style.width = "95%"
div.style.height = "fit-content"
div.style.display = "flex"
div.style.flexDirection = "row"
div.style.flexWrap = "wrap"
div.style.padding ="2%"
div.style.alignItems = "center"


for ( let i in objList){
    let container = document.createElement('div')
    container.style.width = "fit-content"
    container.style.height = "fit-content"
    container.style.display = "flex"
    container.style.flexDirection = "column"
    container.style.padding ="2%"
    container.style.margin = "2%"
    container.style.border = "2px solid black"
    container.style.borderRadius = "2%"

    
        let img = document.createElement('img')
        img.width = 150
        img.height = 150
        img.src = objList[i].imageSrc
        img.style.border = "1px solid black"

        let title = document.createElement('h3')
        title.innerHTML = objList[i].title

        let price = document.createElement('h3')
        price.innerHTML = '₹' + objList[i].price

        let remove = document.createElement('button')
        remove.style.width = "100px"
        remove.style.height = "50px"
        remove.style.backgroundColor = "red"
        remove.style.color = "black"
        remove.innerHTML = "Remove"
        remove.style.border = "none"
        remove.style.borderRadius = "6%"

        remove.addEventListener("click",()=>{
            delete objList[i]
            localStorage.setItem('objList',JSON.stringify(objList))
            div.removeChild(container)
        })

        container.appendChild(img)
        container.appendChild(title)
        container.appendChild(price)
        container.appendChild(remove)
        


    div.append(container)
    console.log(objList[i].title)
}

document.body.append(div)

let pay = document.querySelector('.pay')
pay.addEventListener('click',()=>{

    if(document.querySelectorAll('h3').length>0){
        alert('Order Placed Succesfully')
        return
    }
    alert('Your Cart Is Empty')
})