sidebar = $(".sidebar");
hamburger_sidebar = $(".side-menu-hamburger-button");

contentButtonPairs = {
  whoContent: { content: $(".content.who"), button: $(".button.who") },
  whatContent: { content: $(".content.what"), button: $(".button.what") },
  whyContent: { content: $(".content.why"), button: $(".button.why") },
};

maxHeight =
  Math.max(
    contentButtonPairs.whoContent.content.height(),
    Math.max(
      contentButtonPairs.whatContent.content.height(),
      contentButtonPairs.whyContent.content.height()
    )
  ) + 20;

console.log(maxHeight);

switch (maxHeight - 20) {
  case contentButtonPairs.whoContent.content.height():
    console.log("Who");
    break;
  case contentButtonPairs.whatContent.content.height():
    console.log("What");
    break;
  case contentButtonPairs.whyContent.content.height():
    console.log("Why");
    break;
  default:
    break;
}

contentButtonPairs.whoContent.content.height(maxHeight);
contentButtonPairs.whatContent.content.height(maxHeight).css("display", "none");
contentButtonPairs.whyContent.content.height(maxHeight).css("display", "none");

last = "whoContent";

$.each(contentButtonPairs, function (key, currentPair) {
  currentPair.button.click(() => {
    changeContent(key, currentPair.content, currentPair.button);
  });
});

function changeContent(key, currentContent, currentButton) {
  console.log(currentContent);
  if (last !== currentContent) {
    //content change
    contentButtonPairs[last].content.fadeOut(400, function () {
      //buttons change
      contentButtonPairs[last].button.removeClass("selected");
      currentButton.addClass("selected");
      currentContent.fadeIn(400, function () {
        last = key;
      });
    });
  }
}

sidebar_width = sidebar.width() * 2;

function closeSidebar() {
  sidebar.css("right", -sidebar_width - 30);
  hamburger_sidebar.css("right", -sidebar_width - 30);
}

function openSidebar() {
  //Move to close position
  sidebar.css("transition", "none");
  sidebar.css("right", -sidebar_width / 2 - 30);

  //Do slide animation
  sidebar.css("transition", "0.5s ease-in-out");
  sidebar.css("right", "-10px");

  //Move to close position
  hamburger_sidebar.css("transition", "none");
  hamburger_sidebar.css("right", -sidebar_width / 2 - 30);

  //Do slide animation
  hamburger_sidebar.css("transition", "0.5s ease-in-out");
  hamburger_sidebar.css("right", "-10px");
}

//Scroll detection for the BLOG header
var href = document.location.href;
var lastPathSegment = href.substr(href.lastIndexOf("/") + 1);
if (lastPathSegment === "blog.html" || lastPathSegment === "works.html") {
  header = $("header");
  header.css("background", "#27a46a00");
  $(document).on("scroll", function () {
    if ($(this).scrollTop() >= $(".main-cta").position().top) {
      header.css("background", "#27a469");
    } else {
      header.css("background", "#27a46a00");
    }
  });
}
