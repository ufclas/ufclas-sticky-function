# ufclas-sticky-function

This plugin applies the "position: sticky" style, like if you want a sidebar to stick as you scroll down the page, and measures the sibling container to prevent the sidebar overlapping the footer. Sidebar is hidden on mobile.

Here is an example of how this could be used in combination with bootstrap styles. The relevant styles to the sticky functionality are "parent-of-sticky", "sibling-of-sticky" and "sticky":

<div class="row parent-of-sticky">
  <div class="col-sm-9 sibling-of-sticky">
    Main page content
  </div>
  <div class="col-sm-3 sticky">
    Sticky sidebar
  <div>
</div>
