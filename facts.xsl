<?xml version="1.0" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform"	version="2.0">
	<xsl:template match="*">
		<xsl:applytemplates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:applytemplates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>FACTS</title>
			</head>
			<body>
				<!--Comedy-->
				<h2>Comedy Facts:</h2>
				<xsl:apply-templates select="/catalog/genre[1]/facts/fact"/>
				<!--Sports-->
				<h2>Sport Facts:</h2>
				<xsl:apply-templates select="/catalog/genre[2]/facts/fact"/>
				<!--History-->
				<h2>History Facts:</h2>
				<xsl:apply-templates select="/catalog/genre[3]/facts/fact"/>
				<!--Random-->
				<h2>Random Facts:</h2>
				<xsl:apply-templates select="/catalog/genre[4]/facts/fact"/>
				
				
			</body>
		</html>
	</xsl:template>
	
	<!--Fact Templates-->
	<xsl:template match="fact">
		<xsl:value-of select="."/><br />
	</xsl:template>
	
</xsl:transform>