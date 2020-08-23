(function () {
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

  contentButtonPairs.whoContent.content.height(maxHeight);
  contentButtonPairs.whatContent.content.height(maxHeight);
  contentButtonPairs.whyContent.content.height(maxHeight);

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
})();
