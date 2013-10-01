Summary

   Use this module if your website needs to have tracked documents
   representing one or more files.

   This module creates a document node type which can be used for
   uploading files to your website. Tokens are created that link to the
   uploaded files giving you access to the urls of the files. A Token tree
   is shown on node edit forms.

Requirements

    1. The Token and Token Filter modules.

Installation

    1. Download and unzip this module into your modules directory.
    2. Goto Administer > Site Building > Modules and enable this module.
    3. Unless you already have a node type that is tracking documents, you
       may enable node_files_document, which will provide the node type
       document.

Configuration

    1. Configure your text formats to use the token filter.

Usage

   There are two ways to configure the token info.

   The first way will list out all of the documents in the token tree.
   This is good for sites with fewer than say 100 documents.

   The other way will show the token pattern and should be used for sites
   which will have many documents. It requires a little more work on the
   part of the Content Managers as they will have to manually retain and
   insert the NID (of the document node) in the token when it's inserted.

   When a document node contains more than one file the delta is appened
   to the token like this:
[document:90-1]

   Note that the 1 refers to the first file on the field, and for us
   developers, it refers to the [0] index of the array. Also the following
   two tokens are equivalent:
[document:90]
[document:90-1]

API

   Please see node_files.api.php.

Contact

     * In the Loft Studios
     * Aaron Klump - Developer
     * PO Box 29294 Bellingham, WA 98228-1294
     * aim: theloft101
     * skype: intheloftstudios
     * d.o: aklump
     * [1]http://www.InTheLoftStudios.com

References

   1. http://www.InTheLoftStudios.com/
