/* 
    list of apis:
    not paginated:
        - categories: links
        - about us: name, description, image,
        - contactUsInfo: email, phone, fax,POBBox and box_no
        - news/show/id: the report itself
    paginated
        - news: published newsItems with categories inside
        - news/category/id: filtering by category
        - site/settings: logo, brand name
        - sliders: images aor videos;
        - video: list of available videos
        - 
*/

//headers:
// lang: en, ar, he
// page: 1,2,3,31
async function fetchWrapper(pathName, lang, page) {
  try {
    const BASEURL = import.meta.env.VITE_BASE_PROD_URL;
    console.log(BASEURL);
    if (!BASEURL) {
      throw new Error("No Backend URL specified");
    }
    const request = await fetch(`${BASEURL}${pathName}`, {
      headers: {
        lang: lang || "ar",
        page: page || 1,
      },
    });
    const response = await request.json();
    console.log(response);
    if (response.status === 200) {
      return response.data;
    }
  } catch (e) {}
}
export default fetchWrapper;
