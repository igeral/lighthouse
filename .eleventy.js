module.exports = function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("./src/style.css");
  eleventyConfig.addPassthroughCopy("./src/images");
  eleventyConfig.addPassthroughCopy("./src/js");
  eleventyConfig.addPassthroughCopy("./src/style.css");
  eleventyConfig.addPassthroughCopy("./src/fonts");
  return {
    dir: {
      input: "src",
      includes: "_includes",
      output: "public",
    },
    // templateFormats: ["html", "liquid", "njk"],
  };
};
