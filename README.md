# Mu-Scope
Web framework for listing DICOMs that uses the DWV web dicom viewer

## ROADMAP 

### Priority things to do

- [ ] **Create a specimen page template, so dicom, stl and information about the specimen all appear together in unison**. Will have to point to XML file, so with every different specimen the information, dicom and stl are different but the format will always be the same. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [ ] **Try to implement Unity & Dicom Viewer on the same page**. Once the template for the specimen has been written, try using iframes? to put dicom and web player in their desginated area. Use php so the information on the page is dependent on the specimen id.
- [ ] **Enhance the Unity Web Player**. Perhaps add numbers or labels? Make it easier to learn about the features and the markings etc. This could be difficult with each specimen, it will be hard to add new labels every time. 

### Other things to do

- [x] **Write css template** to overlay the bootstrap theme. (Custom fonts, introduce some subtle colour etc).
- [ ] **Create a homepage** so there is a small introduction about the life sciences museum, and then five different divs for each collection (the Zoological Collection, Botanical Collection, Pharmaceutical Collection, Microscope Slide Collection, Craniofacial Skeletal Collection). The navbar at the top should include (HOME, COLLECTIONS, WHAT’S ON, ABOUT).
- [ ] **Zoological collection page** or the current landing page, needs photos. Go to the Life Sciences musuem to take some pictures for use on the website.

### Bugs

- [ ] **img placeholder** needs to be replaced with xml file image. At current, an img folder has been created to serve as a place for the jpg files. 

### New Ideas and Suggestions

- **[Sketchfab](https://sketchfab.com/models/209bffe6866042379a704ce46bb6e632)** - example from the natural history museum in Oxford. Same thing as what we are doing however will be harder to implement it all automatically. Quality is very good though, useful for ideas. Has google cardboard support which could be interesting.
