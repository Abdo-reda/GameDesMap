class svgComp {
    private tag:string;
    private child: svgComp[];

    constructor(tag:string)
    {
        this.tag = tag;
    }
    
    setTag(tag:string): void
    {
        this.tag = tag;
    }
}

export default svgComp;
