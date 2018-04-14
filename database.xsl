<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
 
  <h2>Artists</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Description</th>
	  <th style="text-align:left">Location</th>
	  <th style="text-align:left">Birth</th>
	  <th style="text-align:left">Death</th>
	  <th style="text-align:left">Genre</th>
    </tr>
    <xsl:for-each select="data/artists/artist">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="description"/></td>
	  <td><xsl:value-of select="location"/></td>
	  <td><xsl:value-of select="birth"/></td>
	  <td><xsl:value-of select="death"/></td>
	  <td><xsl:value-of select="genre"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
  <h2>Artworks</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Description</th>
	  <th style="text-align:left">Paint Type</th>
	  <th style="text-align:left">Creation Date</th>
	  <th style="text-align:left">Dimensions</th>
	  <th style="text-align:left">Location</th>
	  <th style="text-align:left">Price</th>
	  <th style="text-align:left">Artist</th>
	  <th style="text-align:left">Genre</th>
	  <th style="text-align:left">Museum</th>
    </tr>
    <xsl:for-each select="data/artworks/artwork">
    <tr>
      <td><xsl:value-of select="artName"/></td>
      <td><xsl:value-of select="description"/></td>
	  <td><xsl:value-of select="paintType"/></td>
	  <td><xsl:value-of select="creationDate"/></td>
	  <td><xsl:value-of select="dimensions"/></td>
	  <td><xsl:value-of select="location"/></td>
	  <td><xsl:value-of select="price"/></td>
	  <td><xsl:value-of select="artist"/></td>
	  <td><xsl:value-of select="genre"/></td>
	  <td><xsl:value-of select="museum"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
  <h2>Museums</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Date Established</th>
	  <th style="text-align:left">Location</th>
	  <th style="text-align:left">Address</th>
	  <th style="text-align:left">Architect(s)</th>
	  <th style="text-align:left">History</th>
	  <th style="text-align:left">Famous Art</th>
    </tr>
    <xsl:for-each select="data/museums/museum">
    <tr>
      <td><xsl:value-of select="museumName"/></td>
      <td><xsl:value-of select="dateEST"/></td>
	  <td><xsl:value-of select="location"/></td>
	  <td><xsl:value-of select="address"/></td>
	  <td><xsl:value-of select="architect"/></td>
	  <td><xsl:value-of select="history"/></td>
	  <td><xsl:value-of select="famousArt"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
  <h2>Shipping Plans</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Plan</th>
      <th style="text-align:left">Cost</th>
    </tr>
    <xsl:for-each select="data/shipping/plan">
    <tr>
      <td><xsl:value-of select="shippingPlan"/></td>
      <td><xsl:value-of select="shippingCost"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
  <h2>Invoices</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Art Name</th>
      <th style="text-align:left">Quantity</th>
	  <th style="text-align:left">Price</th>
	  <th style="text-align:left">Tax</th>
	  <th style="text-align:left">Shipping</th>
	  <th style="text-align:left">Total Price</th>
    </tr>
    <xsl:for-each select="data/invoices/invoice">
    <tr>
      <td><xsl:value-of select="artName"/></td>
      <td><xsl:value-of select="quantity"/></td>
	  <td><xsl:value-of select="price"/></td>
	  <td><xsl:value-of select="tax"/></td>
	  <td><xsl:value-of select="shippingCost"/></td>
	  <td><xsl:value-of select="totalPrice"/></td>
    </tr>
    </xsl:for-each>
  </table>
  
  </body>
  </html>
</xsl:template>

</xsl:stylesheet> 