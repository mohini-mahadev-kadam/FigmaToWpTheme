var index = 1 ;
var slideArr = [] ;
var postArr = [] ;
var filterPost = [] ;
var pageNo = 0 ;


window.onload = ()=>{ 
   
    let arr = [];

    //Here we fetched data from slides.json file it returned a promise then using.then method twice we have taken data from slides.json file to array(sideArr)
    fetch('./../slides.json', {
        method: 'GET'
      })
    .then(response => {
        return response.json();
        })
    .then(data => {
    //do whatever with your data
    slideArr = data ;

    //It will set the default image and text on slider after loading page and fetching data from slides.json file  
    document.getElementById('master').style.backgroundImage = "url(" + slideArr[index%slideArr.length].img + ")";
    loadImageText();

                        
    })

    
    //Intially this function called imediately before fetching the data from json file
    //This function will load images and text after 5 seconds to avoid delay this function called after fetching the data from slides.json
    sliding() ;
   

    //Here we fetched data from posts.json file it returned a promise then using.then method twice we have taken data from posts.json file to array(postArr)
    fetch('./../posts.json')
    .then(response => {
        return response.json() ;
    })
    .then(data => {
        postArr = data.posts ;
        filterPost = postArr
        post(0,postArr) ;
        numOfPage(postArr);
        selectPageBgColor(pageNo,postArr) ;
    })

}


//Image Sliding :- this function will replace image and text after each 5 seconds
function sliding()
{

    setInterval(initial, 5000);
}


//Initial
function initial()
{
    var img =  document.getElementById('master');
    img.style.backgroundImage = "url(" + slideArr[index++%slideArr.length].img + ")";
    
    loadImageText();

}


//This function is written to load text on images after 5 seconds and onclick of arrows
function loadImageText(){

    
    var desc=slideArr[index%slideArr.length].desc;

    let part1 = desc.substring(0, desc.length/2);
    let part2 = desc.substring(desc.length/2, desc.length);

    document.getElementById('imageText').innerHTML=`
    <div>
    <p class="head"><b>`+slideArr[index%slideArr.length].title+`</b></p>
    <P>`+part1+`<span id="dots">...</span><span id="more">`+part2+`</span></P>
    <div class="read-btn" onclick="myFunction()" id="myBtn">
        <p style="margin-right: 5px;">READ MORE</p>
        <img src="./assets/images/read-more-right-arrow-svgrepo-com.svg" width="25px" height="25px">
    </div>

    </div>`

}



//left-arrow
function left()
{

    if(index>0)
    {

        document.getElementById('master').style.backgroundImage = "url(" + slideArr[--index % slideArr.length].img + ")";
        
        loadImageText();
    
    }
}


//right-arrow
function right()
{
    if(index<slideArr.length-1)
    {
       
        document.getElementById('master').style.backgroundImage = "url(" + slideArr[++index % slideArr.length].img + ")";
        
        loadImageText();

    }
}

//this function will render the buttons at the bottom of pages the number of button will change dynamically depending upon the length of postArr
function numOfPage(postArr){

    let page =  Math.round(postArr.length/4) ;
    
    if(page === 0 && postArr.length!=0)
    page = 1 ;
    let pages = `` ;
    
    for(let i=0;i<page;i++)
    {
        pages+=`<div class="pageStyle" id="page${i}" onclick="changePage(${i})">${i+1}</div>`
    }

    document.getElementById("pagination").innerHTML = pages ;
}



//Onclick of pagination buttons this function will be called
function changePage(pageIndex)
{
    pageNo = pageIndex
    post(pageNo,filterPost) ;
    selectPageBgColor(pageNo,filterPost) ;
}



// function changePageByClick(page) Changes the background color of button when the button is selected
function selectPageBgColor(index, postArr){
    
    if(postArr.length)
    {
        let selectPage = document.getElementById(`page${index}`) ;
        selectPage.style.backgroundColor = '#667eea' ;
        selectPage.style.color = 'white' ;
    
        let page = Math.round(postArr.length/4) ;
        
        if(page === 0 && postArr.length!=0)
        page = 1 ;
        
        for(let i=0;i<page;i++){
           
            if(i === index)
            continue;

            let otherPage = document.getElementById(`page${i}`) ;
            otherPage.style.backgroundColor = '#f6f9fd' ;
            otherPage.style.color = '#4c51bf' ;
        
        }
    }
   
}



//This function is used to render the posts at all-articles div
function post(index,postArr) {

    let allPost = ''
    let row = '' ;
  

    if(postArr.length)
    {
        for(let i=index*4;i<index*4+4;i++)
        {
            //when the data is asked for index which is grater than the available then it will return empty
            if(i>=postArr.length)
            {
                row +=`<div class="row row-mobile">${allPost}</div>` ;
                break;
            }
    
            const d = new Date(postArr[i].datetime) ;
          
    
            allPost+=`<div class="col col-mobile"><div class="col-a" id="demo" style="background-image: url(${postArr[i].img});">
                <div class="travel"> lifestyle </div>
            </div>
            <div class="content">
                <h2 class="article-heading">${postArr[i].title}</h2>
                <div class="date-comment">
                    <p class="date">${d.toString().substring(0,24)} / : ${postArr[i].author}</p>
                    <p class="comment">${postArr[i].comment_count} comments</p>
                </div>
                <p class="desc">
                    ${postArr[i].desc}
                </p>
            </div></div>`
    
          
            if(i%2 === 1 && i!=0)
            {
                row +=`<div class="row row-mobile">${allPost}</div>` ;
                allPost = '' ;
            
            }
            
        }       
    }
    //Added this else part when we search using search box and no results found then else part will excecute...just to notify user
    else{
        row +=`<div class="row row-mobile"><p><b>Sorry... No result found</b></p></div>` 
    }

    document.getElementById('all-article').innerHTML = row ;
   
}

function search()
{
    let searchBox = document.getElementById('search-box') ;
    let searchKey = searchBox.value ;
    filterPost = []

    // postArr.forEach(item=>{

    //     if(item.title.toLowerCase().search(searchKey.toLowerCase())!=-1 ||item.desc.toLowerCase().search(searchKey.toLowerCase())!=-1)
    //     {
    //         filterPost.push(item);
    //     }
     
    // })



    //Here forEach loop is replaced with filter function it will give the same result as above
    postArr.filter(item=>{
        if(item.title.toLowerCase().search(searchKey.toLowerCase())!=-1 ||item.desc.toLowerCase().search(searchKey.toLowerCase())!=-1)
        {
            filterPost.push(item);
        }
    })




    post(pageNo,filterPost) ;
    numOfPage(filterPost) ;
    selectPageBgColor(pageNo,filterPost) ;
    
}


//This function is written to show full description of images when we click READ MORE and show less description when we click READ LESS
function myFunction() 
{
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") 
    {
      dots.style.display = "inline";
      btnText.innerHTML = "<p style='margin-right: 5px;'>READ MORE</p> <img src='./assets/images/read-more-right-arrow-svgrepo-com.svg' width='25px' height='25px'>"; 
      moreText.style.display = "none";
    } 
    else 
    {
      dots.style.display = "none";
      btnText.innerHTML = "READ LESS"; 
      moreText.style.display = "inline";
    }

  }



