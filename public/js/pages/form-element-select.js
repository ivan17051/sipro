let choices = document.querySelectorAll('.choices');
let initChoice;
let choicesList = {};
for(let i=0; i<choices.length;i++) {
  if (choices[i].classList.contains("multiple-remove")) {
    initChoice = new Choices(choices[i],
      {
        delimiter: ',',
        editItems: true,
        maxItemCount: -1,
        removeItemButton: true,
      });
  }else{
    initChoice = new Choices(choices[i]);
  }
  let id = choices[i].id;
  if(id){
    choicesList[id]=initChoice;
  }
}
