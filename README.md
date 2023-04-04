# ufclas-sticky-function

This plugin applies the position: sticky style and measures the sibling container so the "stickiness" stops before the footer is reached.

Here is an example of how this could be used in combination with bootstrap styles. The relevant styles to the sticky functionality are "parent-of-sticky", "sibling-of-sticky" and "sticky":

<div class="row parent-of-sticky">
  <div class="col-sm-9 sibling-of-sticky">
    Main page content
  </div>
  <div class="col-sm-3 sticky">
    Sticky sidebar
  <div>
</div>
