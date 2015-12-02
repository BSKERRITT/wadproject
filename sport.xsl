<?xml version="1.0" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform"	version="1.0">
	<xsl:template match="*">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>FACTS</title>
			</head>
			<body>
				<!--Sport-->
				<p>Sport Fact:</p>
				<xsl:apply-templates select="//catalog/genre[2]/facts/fact"/>
				
			</body>
		</html>
	</xsl:template>
	
	<!--Fact Templates-->
	<xsl:template match="facts[1]/fact/text()">
		<xsl:value-of select="."/><br />
	</xsl:template>
	
</xsl:transform>