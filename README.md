# Mu-Scope
Web framework for listing DICOMs that uses the DWV web dicom viewer

##### MOST RECENT UPDATE <small>Specimen Page written</small>
<small>

- Created fundamental structure of the specimen page, containing the following information about the specimen in order: the name, latin name, a photograph taken from museum, introductory description, 3D (STL) View, 3D surface markings of interest (written as a paragraph beneath the viewer), Cross-sectional (DICOM) View, Cross-sectional points of interest (written as a paragraph beneath the viewer). [Note all of the information in this case has been directly applied to the .php file and will be taken from an updated .xml file in the next commit]
- Redesigned navbar for the specimen page. Navbar’s are often intrusive when trying to learn and focus on the page content. In this case the navbar has been faded/blurred out and comes back into focus on hover. A delay has also been introduced so it does not return to its resting blurred state immediately (Note as the blur effect is a new in css, only certain browsers such as safari support it).
- The new specimen page can be accessed from the “collections” (landing) page. By clicking on any of the explore specimen buttons. Eventually each button will lead to a page specific to the selected specimen.
- Unity Player is no longer on a separate page and works inline in the page. The branding and fullscreen buttons have been commented out. The fullscreen button did not seem to function correctly and the logo was getting in the way of the description below. Everything else about the Unity Player is functioning correctly and it works perfectly.
- Dicom viewer not working, and I have created an image substitute for the meantime. Something to work on integrating into the page next.
- Small visual changes and tweaks.

</small>

## ROADMAP 

### Priority things to do

- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Unity Player working inline on the specimen page** directly integrated into the HTML/JS/CSS code.
- [ ] **Point specimen page template to xml file using php** so with every different specimen the information, dicom and stl are different but the format will always be the same.
- [ ] **Get Dicom Viewer working inline on specimen page**, use iframes?
- [ ] **Enhance the Unity Web Player**. Perhaps add numbers or labels? Make it easier to learn about the features and the markings etc. This could be difficult with each specimen, it will be hard to add new labels every time. Also and improvement of lighting and textures.

### Other things to do

- [x] **Write css template** to overlay the bootstrap theme. (Custom fonts, introduce some subtle colour etc).
- [ ] **Create a homepage** so there is a small introduction about the life sciences museum, and then five different divs for each collection (the Zoological Collection, Botanical Collection, Pharmaceutical Collection, Microscope Slide Collection, Craniofacial Skeletal Collection). The navbar at the top should include (HOME, COLLECTIONS, WHAT’S ON, ABOUT).
- [ ] **Zoological collection page** or the current landing page, needs photos. Go to the Life Sciences musuem to take some pictures for use on the website.

### Bugs

- [ ] **img placeholder** needs to be replaced with xml file image. At current, an img folder has been created to serve as a place for the jpg files. 
- [ ] **fullscreen unity player** - the button fails to work and has been commented out at the moment.

### New Ideas and Suggestions

- **[Sketchfab](https://sketchfab.com/models/209bffe6866042379a704ce46bb6e632)** - example from the natural history museum in Oxford. Same thing as what we are doing however will be harder to implement it all automatically. Quality is very good though, useful for ideas. Has google cardboard support which could be interesting.
